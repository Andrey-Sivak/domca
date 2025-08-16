import { RichText } from '@wordpress/block-editor';
import NoteCheckIcon from './NoteCheckIcon.js';

const ItemCard = ({
	baseClass,
	item,
	onChangeTitle,
	onChangeNote,
	renderSubItems,
}) => {
	return (
		<div className={`${baseClass}__item-content`}>
			<div>
				<RichText
					tagName="p"
					className={`${baseClass}__item-title`}
					value={item.title}
					onChange={onChangeTitle}
					placeholder="Input item title..."
				/>

				{renderSubItems}
			</div>

			<div className={`${baseClass}__item-note`}>
				<NoteCheckIcon baseClass={baseClass} />
				<RichText
					tagName="p"
					className={`${baseClass}__item-note-text`}
					value={item.note}
					onChange={onChangeNote}
					placeholder="Input note..."
				/>
			</div>
		</div>
	);
};

export default ItemCard;
