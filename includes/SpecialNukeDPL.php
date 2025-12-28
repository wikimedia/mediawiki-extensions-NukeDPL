<?php

use MediaWiki\Html\Html;
use MediaWiki\Linker\Linker;
use MediaWiki\MediaWikiServices;
use MediaWiki\Title\Title;

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
		$title = $this->getPageTitle();
		$output = $this->getOutput();

		$output->addWikiTextAsInterface( $this->msg( 'nukedpl-intro' )->text() );

		$output->addHTML( Html::openElement( 'form', [ 'action' => $title->getLocalURL( 'action=submit' ), 'method' => 'post' ] ) );
		$output->addHTML( Html::element( 'textarea', [ 'name' => 'query', 'style' => 'width: 100%; height: 50em;' ], $this->msg( 'nukedpl-defaulttext' )->text() ) );
		$output->addHTML( Html::element( 'br' ) );
		$output->addHTML( Html::element( 'input', [ 'type' => 'submit', 'value' => $this->msg( 'nukedpl-candidatelist' )->text() ] ) );
		$output->addHTML( '</form>' );
	}

	function deleteForm( $query, $reason ) {
		$title = $this->getPageTitle();
		$output = $this->getOutput();

		$pages = $this->getPages( $query );
		$count = count( $pages );
		if ( $count == 0 ) {
			$output->addWikiTextAsInterface( $this->msg( 'nukedpl-nopages', $query )->text() );
			return $this->queryForm();
		}

		$output->addWikiTextAsInterface( $this->msg( 'nukedpl-list', $count, $query )->text() );

		$output->addHTML( Html::openElement( 'form', [ 'action' => $title->getLocalURL( 'action=delete' ), 'method' => 'post' ] ) );
		$output->addHTML( Html::element( 'input', [ 'type' => 'submit', 'value' => $this->msg( 'nukedpl-nuke' )->text() ] ) );
		$output->addHTML( Html::element( 'div', [], $this->msg( 'deletecomment' )->text() ) );
		$output->addHTML( Html::element( 'input', [ 'name' => 'reason', 'value' => $reason, 'size' => 60 ] ) );
		$output->addHTML( '<ol>' );
		foreach ( $pages as $page ) {
			$page = Title::newFromText( $page );
			if ( $page && $page->isKnown() ) {
				$output->addHTML( '<li>' );
				$output->addHTML( Html::element( 'input', [ 'type' => 'checkbox', 'name' => 'ids[]', 'value' => $page->getArticleID(), 'checked' => 'checked' ] ) );
				$output->addHTML( Linker::linkKnown( $page ) );
				$output->addHTML( '</li>' );
			}
		}
		$output->addHTML( '</ol>' );
		$output->addHTML( Html::element( 'input', [ 'type' => 'submit', 'value' => $this->msg( 'nukedpl-nuke' )->text() ] ) );
		$output->addHTML( '</form>' );
	}

	function getPages( $query ) {
		$user = $this->getUser();
		$title = $this->getPageTitle();
		$intersectionQuery = trim( $query ) . PHP_EOL . "mode=none";
		$query = trim( $query ) . PHP_EOL . "format=,$$$%PAGE%$$$,,"; // Enclose each title with $$$
		$parser = MediaWikiServices::getInstance()->getParser();
		$parserOptions = ParserOptions::newFromUser( $user );
		if ( in_array( 'dpl', $parser->getTags() ) ) {
			$parserOutput = $parser->parse( '<dpl>' . $query . '</dpl>', $title, $parserOptions, false, true );
			preg_match_all( '|\$\$\$(.+)\$\$\$|U', $parserOutput->getContentHolderText(), $matches ); // Extract the titles from the output
		} else {
			$parserOutput = $parser->parse( '<DynamicPageList>' . $intersectionQuery . '</DynamicPageList>', $title, $parserOptions, false, true );
			preg_match_all( '|<a href="[^"]+" title="([^"]+)">|', $parserOutput->getContentHolderText(), $matches );
		}
		return $matches[1]; // Return an array of titles
	}

	function doDelete( $ids, $reason ) {
		$services = MediaWikiServices::getInstance();
		foreach ( $ids as $id ) {
			$wikiPage = $services->getWikiPageFactory()->newFromID( $id );
			$deletePage = $services->getDeletePageFactory()
				->newDeletePage( $wikiPage, $this->getUser() );
			$deletePage->deleteIfAllowed( $reason );
		}
	}

	protected function getGroupName() {
		return 'pagetools';
	}
}
