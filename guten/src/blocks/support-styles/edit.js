import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import SectionSeparator from '../hero-section/SectionSeparator.js';
import ItemsList from './ItemsList.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, items, button } = attributes;

	const baseClass = 'wp-block-domca-support-styles';

	const blockProps = useBlockProps({
		className: baseClass,
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
					<ItemsList
						baseClass={baseClass}
						items={items}
						setAttributes={setAttributes}
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__button dm-button dm-button-primary`}
						value={button}
						onChange={(newButton) =>
							setAttributes({ button: newButton })
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
