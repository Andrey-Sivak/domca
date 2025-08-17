import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ImageUploader from '../../utils/ImageUploader.js';
import BgSvg from './BgSvg.js';
import SectionSeparator from '../hero-section/SectionSeparator.js';
import BgSvgMob from './BgSvgMob.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, caption, text, image } = attributes;

	const baseClass = 'wp-block-domca-start-date-info';

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
					<div className={`${baseClass}__content`}>
						<BgSvg baseClass={baseClass} />
						<BgSvgMob baseClass={baseClass} />
						<div className={`${baseClass}__content-inner`}>
							<RichText
								tagName="p"
								className={`${baseClass}__caption`}
								value={caption}
								onChange={(newCaption) =>
									setAttributes({ caption: newCaption })
								}
								placeholder="Input caption..."
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__text`}
								value={text}
								onChange={(newText) =>
									setAttributes({ text: newText })
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
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
