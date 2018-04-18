<?php

namespace bkonetzny\MjmlRenderer\Tags;

class MjColumn implements TagInterface {

	/**
	 * {@inheritDoc}
	 * @see \bkonetzny\MjmlRenderer\Tags\TagInterface::render()
	 */
	public function render(\IvoPetkov\HTML5DOMDocument $dom, \IvoPetkov\HTML5DOMElement $node)
	{
		$innerHtml = $node->innerHTML;

		$output = <<<HTML
			<div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
				<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
					{$innerHtml}
				</table>
			</div>
HTML;

		$fragment = $dom->createDocumentFragment();
		$fragment->appendXML($output);

		return $fragment;
	}

}
