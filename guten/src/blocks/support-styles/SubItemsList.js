import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';

const SubItemsList = ({
	baseClass,
	subItems = [],
	onAdd,
	onChange,
	onRemove,
}) => {
	return (
		<div className={`${baseClass}__item-list`}>
			{subItems.map((text, i) => (
				<div key={i} className={`${baseClass}__item-list-item`}>
					<RichText
						tagName="p"
						className={`${baseClass}__item-text`}
						value={text}
						onChange={(v) => onChange(i, v)}
						placeholder="List item text..."
					/>
					<RemoveButtonCross handleClick={() => onRemove(i)} />
				</div>
			))}

			<Button
				isPrimary
				onClick={onAdd}
				className="dm-button dm-admin-button"
			>
				{subItems.length ? 'Add list item' : 'Add first list item'}
			</Button>
		</div>
	);
};

export default SubItemsList;
