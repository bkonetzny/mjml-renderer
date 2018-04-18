<?php

namespace bkonetzny\MjmlRenderer;

class Renderer {

	private $tagRegistry = array(
		// Structural elements
		'mj-body' => '\bkonetzny\MjmlRenderer\Tags\MjBody',
		'mj-section' => '\bkonetzny\MjmlRenderer\Tags\MjSection',
		'mj-column' => '\bkonetzny\MjmlRenderer\Tags\MjColumn',

		// Content elements
		'mj-divider' => '\bkonetzny\MjmlRenderer\Tags\MjDivider',
		'mj-text' => '\bkonetzny\MjmlRenderer\Tags\MjText',
		'mj-image' => '\bkonetzny\MjmlRenderer\Tags\MjImage',
	);

	/**
	 * Render the MJML input to HTML.
	 *
	 * @param string $input
	 * @return string
	 */
	public function render(string $input)
	{
		$dom = new \IvoPetkov\HTML5DOMDocument();
		$dom->loadHTML($input);

		$this->replaceTags($dom);

		$rootNode = $dom->querySelector('mjml');

		return $rootNode->innerHTML;
	}

	/**
	 * Replace given tag with new node.
	 *
	 * @param \IvoPetkov\HTML5DOMDocument $dom
	 * @param string $tagName
	 */
	private function replaceTag(\IvoPetkov\HTML5DOMDocument &$dom, string $tagName)
	{
		$nodes = $dom->querySelectorAll($tagName);

		foreach ($nodes as &$node) { /* @var $node \IvoPetkov\HTML5DOMElement */
			$tagHandler = new $this->tagRegistry[$tagName]();

			if ($fragment = $tagHandler->render($dom, $node)) {
				$node->parentNode->replaceChild($fragment, $node);
			}
		}
	}

	/**
	 * Replace matching nodes with new nodes.
	 *
	 * @param \IvoPetkov\HTML5DOMDocument $dom
	 */
	private function replaceTags(\IvoPetkov\HTML5DOMDocument &$dom)
	{
		foreach ($this->tagRegistry as $tagName => $class) {
			$this->replaceTag($dom, $tagName);
		}
	}

}
