<?php

namespace bkonetzny\MjmlRenderer\Tags\MJML;

use bkonetzny\MjmlRenderer\Tags\AbstractReplaceableTag;
use bkonetzny\MjmlRenderer\Tags\ReplaceableTagInterface;

class MjColumn extends AbstractReplaceableTag implements ReplaceableTagInterface {

    /**
	 * {@inheritDoc}
	 * @see \bkonetzny\MjmlRenderer\Tags\ReplaceableTagInterface::replaceNode()
	 */
	public function replaceNode(\IvoPetkov\HTML5DOMElement $node)
	{
		$innerHtml = $node->innerHTML;

		$output = <<<HTML
			<div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
				<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
					{$innerHtml}
				</table>
			</div>
HTML;
					
		return $this->createDocumentFragment($output);
	}

}
