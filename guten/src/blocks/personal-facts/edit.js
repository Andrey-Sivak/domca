import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ItemsList from './ItemsList.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, facts } = attributes;

	const baseClass = 'wp-block-domca-personal-facts';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
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
					<ItemsList
						setAttributes={setAttributes}
						features={facts}
						baseClass={baseClass}
						featuresKey="facts"
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
