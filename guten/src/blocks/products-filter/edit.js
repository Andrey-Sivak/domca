import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import BlockIdInspectorPanel from '../../common-components/BlockIdInspectorPanel.js';
import './editor.scss';

export default function Edit(props) {
	const { attributes, setAttributes } = props;
	const { title, topicButtonsTitle, toneButtonsTitle, blockId } = attributes;

	const baseClass = 'wp-block-domca-products-filter';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<BlockIdInspectorPanel
				setAttributes={setAttributes}
				blockId={blockId}
			/>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<RichText
						tagName="p"
						className={`${baseClass}__title dm-heading dm-heading-h2`}
						value={title}
						onChange={(newTitle) =>
							setAttributes({ title: newTitle })
						}
						placeholder="Input section title..."
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__filters-title dm-heading dm-heading-h4`}
						value={topicButtonsTitle}
						onChange={(newTopicButtonsTitle) =>
							setAttributes({
								topicButtonsTitle: newTopicButtonsTitle,
							})
						}
						placeholder="Input topic buttons title..."
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__filters-title dm-heading dm-heading-h4`}
						value={toneButtonsTitle}
						onChange={(newToneButtonsTitle) =>
							setAttributes({
								toneButtonsTitle: newToneButtonsTitle,
							})
						}
						placeholder="Input tone buttons title..."
					/>
				</div>
			</div>
		</Fragment>
	);
}
