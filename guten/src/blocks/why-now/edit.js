import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import ReasonsList from '../why-it-works/ReasonsList.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, reasons } = attributes;

	const baseClass = 'wp-block-domca-why-now';

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

					<ReasonsList
						setAttributes={setAttributes}
						items={reasons}
						baseClass={baseClass}
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
