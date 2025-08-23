import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import ReasonsList from './ReasonsList.js';
import './editor.scss';
import SectionSeparator from '../hero-section/SectionSeparator.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, features } = attributes;

	const baseClass = 'wp-block-domca-imagine-this';

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
					<ReasonsList
						baseClass={baseClass}
						setAttributes={setAttributes}
						items={features}
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
