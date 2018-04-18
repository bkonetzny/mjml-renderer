<?php

namespace bkonetzny\MjmlRenderer\Tags;

class MjDivider implements TagInterface {

	/**
	 * {@inheritDoc}
	 * @see \bkonetzny\MjmlRenderer\Tags\TagInterface::render()
	 */
	public function render(\IvoPetkov\HTML5DOMDocument $dom, \IvoPetkov\HTML5DOMElement $node)
	{
		$attrBorderColor = $node->getAttribute('border-color');

		$output = <<<HTML
			<tr>
				<td style="font-size:0px;padding:10px 25px;word-break:break-word;">
					<p style="border-top:solid 4px {$attrBorderColor};font-size:1;margin:0px auto;width:100%;"></p>
					<!--[if mso | IE]>
					<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 4px {$attrBorderColor};font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px">
						<tr>
							<td style="height:0;line-height:0;">&nbsp;</td>
						</tr>
					</table>
					<![endif]-->
				</td>
			</tr>
HTML;

		$fragment = $dom->createDocumentFragment();
		$fragment->appendXML($output);

		return $fragment;
	}

}
