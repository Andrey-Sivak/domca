import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ItemsList from './ItemsList.js';
import SectionSeparator from '../hero-section/SectionSeparator.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, subtitle, items, button } = attributes;

	const baseClass = 'wp-block-domca-email-support-pack';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<SectionSeparator baseClass={baseClass} />
				<SectionSeparator baseClass={baseClass} />
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
						className={`${baseClass}__subtitle`}
						value={subtitle}
						onChange={(newSubtitle) =>
							setAttributes({ subtitle: newSubtitle })
						}
						placeholder="Input section subtitle..."
					/>
					<ItemsList
						items={items}
						baseClass={baseClass}
						setAttributes={setAttributes}
					/>

					<RichText
						tagName="p"
						className={`${baseClass}__button dm-button dm-button-primary`}
						value={button}
						onChange={(newButton) =>
							setAttributes({
								button: newButton,
							})
						}
						placeholder="Button text..."
						allowedFormats={['core/link']}
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
