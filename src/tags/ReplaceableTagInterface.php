<?php

namespace bkonetzny\MjmlRenderer\Tags;

interface ReplaceableTagInterface
{

	/**
	 * Replace the node.
	 *
	 * @param \IvoPetkov\HTML5DOMElement $node
	 * @return \DOMDocumentFragment
	 */
	public function replaceNode(\IvoPetkov\HTML5DOMElement $node);

}
