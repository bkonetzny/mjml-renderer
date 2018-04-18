<?php

namespace bkonetzny\MjmlRenderer\Tags;

class MjBody implements TagInterface {

	/**
	 * {@inheritDoc}
	 * @see \bkonetzny\MjmlRenderer\Tags\TagInterface::render()
	 */
	public function render(\IvoPetkov\HTML5DOMDocument $dom, \IvoPetkov\HTML5DOMElement $node)
	{
		$innerHtml = $node->innerHTML;

		$output = <<<HTML
			<body>
				{$innerHtml}
			</body>
HTML;

		$fragment = $dom->createDocumentFragment();
		$fragment->appendXML($output);

		return $fragment;
	}

}
