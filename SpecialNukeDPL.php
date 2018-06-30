<?php

class SpecialNukeDPL extends SpecialPage {

	function __construct() {
		parent::__construct( 'NukeDPL', 'nukedpl' );
	}

	public function doesWrites() {
		return true;
	}

	function execute( $parser = null ) {
		$user = $this->getUser();
		if ( !$this->userCanExecute( $user ) ) {
			$this->displayRestrictionError();
		}

		$this->setHeaders();
		$this->outputHeader();

		$request = $this->getRequest();
		if ( $request->wasPosted() ) {
			$ids = $request->getArray( 'ids' );
			$query = $request->getText( 'query' );
			$reason = $request->getText( 'reason', $this->msg( 'nukedpl-defaultreason', $query )->inContentLanguage()->text() );
			if ( $query ) {
				$this->deleteForm( $query, $reason );
			} else {
				$this->doDelete( $ids, $reason );
			}
		} else {
			$this->queryForm();
		}
	}

	function queryForm() {
		$title = $this->getTitle();
		$output = $this->getOutput();

		$output->addWikiText( $this->msg( 'nukedpl-intro' )->text() );

		$output->addHTML( Xml::element( 'form', [ 'action' => $title->getLocalURL( 'action=submit' ), 'method' => 'post' ], null ) );
		$output->addHTML( '<textarea name="query" cols="25" rows="30">' . $this->msg( 'nukedpl-defaulttext' )->escaped() . '</textarea>' );
		$output->addHTML( Xml::element( 'input', [ 'type' => 'submit', 'value' => $this->msg( 'nukedpl-candidatelist' )->text() ] ) );
		$output->addHTML( '</form>' );
	}

	function deleteForm( $query, $reason ) {
		$title = $this->getTitle();
		$output = $this->getOutput();

		$pages = $this->getPages( $query );
		$count = count( $pages );
		if ( $count == 0 ) {
			$output->addWikiText( $this->msg( 'nukedpl-nopages', $query )->text() );
			return $this->queryForm();
		}

		$output->addWikiText( $this->msg( 'nukedpl-list', $count, $query )->text() );

		$output->addHTML( Xml::element( 'form', [ 'action' => $title->getLocalURL( 'action=delete' ), 'method' => 'post' ], null ) );
		$output->addHTML( Xml::element( 'input', [ 'type' => 'submit', 'value' => $this->msg( 'nukedpl-nuke' )->text() ] ) );
		$output->addHTML( '<div>' . $this->msg( 'deletecomment' )->escaped() . '</div>' );
		$output->addHTML( Xml::element( 'input', [ 'name' => 'reason', 'value' => $reason, 'size' => 60 ] ) );
		$output->addHTML( '<ol>' );
		foreach ( $pages as $page ) {
			$page = Title::newFromText( $page );
			if ( $page and $page->isKnown() ) {
				$output->addHTML( '<li>' );
				$output->addHTML( Xml::element( 'input', [ 'type' => 'checkbox', 'name' => 'ids[]', 'value' => $page->getArticleID(), 'checked' => 'checked' ] ) );
				$output->addHTML( Linker::link(
					$page,
					null,
					[],
					[],
					[ 'known' ]
				) );
				$output->addHTML( '</li>' );
			}
		}
		$output->addHTML( '</ol>' );
		$output->addHTML( Xml::element( 'input', [ 'type' => 'submit', 'value' => $this->msg( 'nukedpl-nuke' )->text() ] ) );
		$output->addHTML( '</form>' );
	}

	function getPages( $query ) {
		global $wgParser;
		$user = $this->getUser();
		$title = $this->getTitle();
		$query = trim( $query ) . PHP_EOL . "format=,$$$%PAGE%$$$,,"; // Enclose each title with $$$
		$parserOptions = ParserOptions::newFromUser( $user );
		$parserOutput = $wgParser->parse( '<dpl>' . $query . '</dpl>', $title, $parserOptions, false, true );
		preg_match_all( '|\$\$\$(.+)\$\$\$|U', $parserOutput->getText(), $matches ); // Extract the titles from the output
		return $matches[1]; // Return an array of titles
	}

	function doDelete( $ids, $reason ) {
		foreach ( $ids as $id ) {
			$article = Article::newFromID( $id );
			$article->doDelete( $reason );
		}
	}

	protected function getGroupName() {
		return 'pagetools';
	}
}
