<?php

namespace bkonetzny\MjmlRenderer\Tags;

class MjText implements TagInterface {

	/**
	 * {@inheritDoc}
	 * @see \bkonetzny\MjmlRenderer\Tags\TagInterface::render()
	 */
	public function render(\IvoPetkov\HTML5DOMDocument $dom, \IvoPetkov\HTML5DOMElement $node)
	{
		$attrFontSize = $node->getAttribute('font-size');
		$attrFontFamily = $node->getAttribute('font-family');
		$attrColor = $node->getAttribute('color');
		$innerHtml = $node->innerHTML;

		$output = <<<HTML
			<tr>
				<td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
					<div style="font-family:{$attrFontFamily};font-size:{$attrFontSize};line-height:1;text-align:left;color:{$attrColor};">
						{$innerHtml}
					</div>
				</td>
			</tr>
HTML;

		$fragment = $dom->createDocumentFragment();
		$fragment->appendXML($output);

		return $fragment;
	}

}
