import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import ImageGallery from './ImageGallery.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, description, images, button } = attributes;

	const baseClass = 'wp-block-domca-testimonial-gallery';

	const blockProps = useBlockProps({
		className: baseClass,
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className="dm-wrap">
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
							className={`${baseClass}__description`}
							value={description}
							onChange={(newDescription) =>
								setAttributes({ description: newDescription })
							}
							placeholder="Input section description..."
						/>
					</div>
				</div>

				<ImageGallery
					setAttributes={setAttributes}
					items={images}
					baseClass={baseClass}
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
		</Fragment>
	);
};

export default Edit;
