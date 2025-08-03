import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import ItemsList from './ItemsList.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, items } = attributes;

	const baseClass = 'wp-block-domca-join-us';

	const blockProps = useBlockProps({
		className: baseClass,
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
						features={items}
						featuresKey="items"
						baseClass={baseClass}
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
