import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import StatementBg from './StatementBg.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, leftStatement, rightStatement } = attributes;

	const baseClass = 'wp-block-domca-anti-detox-statement';

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
							<StatementBg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__statement`}
								value={leftStatement}
								onChange={(newLeftStatement) =>
									setAttributes({
										leftStatement: newLeftStatement,
									})
								}
								placeholder="Input statement..."
							/>
						</div>
						<div className={`${baseClass}__item right`}>
							<StatementBg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__statement`}
								value={rightStatement}
								onChange={(newRightStatement) =>
									setAttributes({
										rightStatement: newRightStatement,
									})
								}
								placeholder="Input statement..."
							/>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
