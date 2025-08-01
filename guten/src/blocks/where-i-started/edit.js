import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ImageUploader from '../../utils/ImageUploader.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, headText, image, textPartOne, textPartTwo, bottomText } =
		attributes;

	const baseClass = 'wp-block-domca-where-i-started';

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
					<RichText
						tagName="p"
						className={`${baseClass}__head-text`}
						value={headText}
						onChange={(newHeadText) =>
							setAttributes({ headText: newHeadText })
						}
						placeholder="Input text..."
					/>
					<div className={`${baseClass}__content`}>
						<div className={`${baseClass}__content_text`}>
							<RichText
								tagName="p"
								value={textPartOne}
								onChange={(newTextPartOne) =>
									setAttributes({
										textPartOne: newTextPartOne,
									})
								}
								placeholder="Input text..."
							/>
							<RichText
								tagName="p"
								value={textPartTwo}
								onChange={(newTextPartTwo) =>
									setAttributes({
										textPartTwo: newTextPartTwo,
									})
								}
								placeholder="Input text..."
							/>
						</div>

						<div className={`${baseClass}__image`}>
							<ImageUploader
								image={image?.url}
								buttonText={`Select Image`}
								onSelect={(media) => {
									setAttributes({
										image: {
											id: media.id,
											url: media.url,
										},
									});
								}}
							/>
						</div>
					</div>

					<RichText
						tagName="p"
						className={`${baseClass}__bottom-text`}
						value={bottomText}
						onChange={(newBottomText) =>
							setAttributes({ bottomText: newBottomText })
						}
						placeholder="Input text..."
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
