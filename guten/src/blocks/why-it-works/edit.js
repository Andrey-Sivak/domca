import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ReasonsList from './ReasonsList.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, subtitle, reasons, conclusionTitle, conclusionText } =
		attributes;

	const baseClass = 'wp-block-domca-why-it-works';

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
						className={`${baseClass}__subtitle`}
						value={subtitle}
						onChange={(newSubtitle) =>
							setAttributes({ subtitle: newSubtitle })
						}
						placeholder="Input section subtitle..."
					/>
					<ReasonsList
						setAttributes={setAttributes}
						items={reasons}
						baseClass={baseClass}
					/>

					<RichText
						tagName="p"
						className={`${baseClass}__conclusion-title`}
						value={conclusionTitle}
						onChange={(newConclusionTitle) =>
							setAttributes({
								conclusionTitle: newConclusionTitle,
							})
						}
						placeholder="Input conclusion title..."
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__conclusion-text`}
						value={conclusionText}
						onChange={(newConclusionText) =>
							setAttributes({ conclusionText: newConclusionText })
						}
						placeholder="Input conclusion text..."
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
