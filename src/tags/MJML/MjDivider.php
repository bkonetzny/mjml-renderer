<?php

namespace bkonetzny\MjmlRenderer\Tags\MJML;

use bkonetzny\MjmlRenderer\Tags\AbstractReplaceableTag;
use bkonetzny\MjmlRenderer\Tags\ReplaceableTagInterface;

class MjDivider extends AbstractReplaceableTag implements ReplaceableTagInterface {

	/**
	 * {@inheritDoc}
	 * @see \bkonetzny\MjmlRenderer\Tags\ReplaceableTagInterface::replaceNode()
	 */
	public function replaceNode(\IvoPetkov\HTML5DOMElement $node)
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
		
		return $this->createDocumentFragment($output);
	}

}
