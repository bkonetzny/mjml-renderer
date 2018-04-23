<?php

namespace bkonetzny\MjmlRenderer\Tags\MJML;

use bkonetzny\MjmlRenderer\Tags\AbstractReplaceableTag;
use bkonetzny\MjmlRenderer\Tags\ReplaceableTagInterface;

class MjImage extends AbstractReplaceableTag implements ReplaceableTagInterface {

	/**
	 * {@inheritDoc}
	 * @see \bkonetzny\MjmlRenderer\Tags\ReplaceableTagInterface::replaceNode()
	 */
	public function replaceNode(\IvoPetkov\HTML5DOMElement $node)
	{
		$attrWidth = $node->getAttribute('width');
		$attrSrc = $node->getAttribute('src');

		$output = <<<HTML
			<tr>
				<td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
					<table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
						<tbody>
							<tr>
								<td style="width:{$attrWidth}px;">
									<img height="auto" src="{$attrSrc}" style="border:0;display:block;outline:none;text-decoration:none;width:100%;" width="{$attrWidth}" />
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
HTML;
		
		return $this->createDocumentFragment($output);
	}

}
