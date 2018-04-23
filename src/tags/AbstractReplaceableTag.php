<?php

namespace bkonetzny\MjmlRenderer\Tags;

class AbstractReplaceableTag
{

    /** @var \IvoPetkov\HTML5DOMDocument */
    private $domDocument;

	/**
	 * Init the replaceable tag.
	 *
	 * @param \IvoPetkov\HTML5DOMDocument $domDocument
	 */
    public function __construct(\IvoPetkov\HTML5DOMDocument $domDocument)
    {
        $this->$domDocument = $domDocument;
    }

	/**
	 * Create the DOM document fragment.
     *
	 * @param string $htmlContent
     * @return \DOMDocumentFragment
	 */
    public function createFragment(string $htmlContent)
    {
        $fragment = $this->$domDocument->createDocumentFragment();
        $fragment->appendXML($htmlContent);

        return $fragment;
    }

}
