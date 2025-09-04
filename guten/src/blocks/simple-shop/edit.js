import { useBlockProps } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import BlockIdInspectorPanel from '../../common-components/BlockIdInspectorPanel.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { blockId } = attributes;

	const baseClass = 'wp-block-domca-simple-shop';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<BlockIdInspectorPanel
				setAttributes={setAttributes}
				blockId={blockId}
			/>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					Simple Shop Block
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
