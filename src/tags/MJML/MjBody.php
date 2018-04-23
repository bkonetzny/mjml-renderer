<?php

namespace bkonetzny\MjmlRenderer\Tags\MJML;

use bkonetzny\MjmlRenderer\Tags\AbstractReplaceableTag;
use bkonetzny\MjmlRenderer\Tags\ReplaceableTagInterface;

class MjBody extends AbstractReplaceableTag implements ReplaceableTagInterface {

	/**
	 * {@inheritDoc}
	 * @see \bkonetzny\MjmlRenderer\Tags\ReplaceableTagInterface::replaceNode()
	 */
	public function replaceNode(\IvoPetkov\HTML5DOMElement $node)
	{
		$innerHtml = $node->innerHTML;

		$output = <<<HTML
			<body>
				{$innerHtml}
			</body>
HTML;
				
		return $this->createDocumentFragment($output);
	}

}
