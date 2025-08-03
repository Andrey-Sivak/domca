import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ItemBgSvg from './ItemBgSvg.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, text1, text2 } = attributes;

	const baseClass = 'wp-block-domca-what-i-do-today';

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
					<div className={`${baseClass}__content`}>
						<div className={`${baseClass}__item left`}>
							<ItemBgSvg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__text`}
								value={text1}
								onChange={(newText1) =>
									setAttributes({ text1: newText1 })
								}
								placeholder="Input text..."
							/>
						</div>
						<div className={`${baseClass}__item right`}>
							<ItemBgSvg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__text`}
								value={text2}
								onChange={(newText2) =>
									setAttributes({ text2: newText2 })
								}
								placeholder="Input text..."
							/>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
