<?php

namespace bkonetzny\MjmlRenderer\Tags;

interface TagInterface
{

	/**
	 * Render the node.
	 *
	 * @param \IvoPetkov\HTML5DOMDocument $dom
	 * @param \IvoPetkov\HTML5DOMElement $node
	 * @return \DOMDocumentFragment
	 */
	public function render(\IvoPetkov\HTML5DOMDocument $dom, \IvoPetkov\HTML5DOMElement $node);

}
