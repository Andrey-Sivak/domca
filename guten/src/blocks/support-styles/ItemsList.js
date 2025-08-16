import { Button } from '@wordpress/components';
import { memo } from '@wordpress/element';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ItemBgSvg from './ItemBgSvg.js';
import SubItemsList from './SubItemsList.js';
import ItemCard from './ItemCard.js';

const ensureItemShape = (item) => ({
	title: item?.title ?? '',
	items: Array.isArray(item?.items) ? item.items : [],
	note: item?.note ?? '',
});

const ItemsList = ({ baseClass, items = [], setAttributes }) => {
	const setItems = (next) => setAttributes({ items: next });

	const addItem = () => {
		setItems([...items, { title: '', items: [], note: '' }]);
	};

	const removeItem = (index) => {
		setItems(items.filter((_, i) => i !== index));
	};

	const updateItemTitle = (index, title) => {
		const next = [...items];
		next[index] = { ...ensureItemShape(next[index]), title };
		setItems(next);
	};

	const updateItemNote = (index, note) => {
		const next = [...items];
		next[index] = { ...ensureItemShape(next[index]), note };
		setItems(next);
	};

	const addSubItem = (parentIndex) => {
		const next = [...items];
		const current = ensureItemShape(next[parentIndex]);
		next[parentIndex] = { ...current, items: [...current.items, ''] };
		setItems(next);
	};

	const updateSubItem = (parentIndex, subIndex, value) => {
		const next = [...items];
		const current = ensureItemShape(next[parentIndex]);
		const sub = [...current.items];
		sub[subIndex] = value;
		next[parentIndex] = { ...current, items: sub };
		setItems(next);
	};

	const removeSubItem = (parentIndex, subIndex) => {
		const next = [...items];
		const current = ensureItemShape(next[parentIndex]);
		next[parentIndex] = {
			...current,
			items: current.items.filter((_, i) => i !== subIndex),
		};
		setItems(next);
	};

	return (
		<div className={`${baseClass}__items`}>
			{items.map((rawItem, index) => {
				const item = ensureItemShape(rawItem);

				return (
					<div key={index} className={`${baseClass}__item`}>
						<ItemBgSvg baseClass={baseClass} />

						<ItemCard
							baseClass={baseClass}
							item={item}
							onChangeTitle={(v) => updateItemTitle(index, v)}
							onChangeNote={(v) => updateItemNote(index, v)}
							renderSubItems={
								<SubItemsList
									baseClass={baseClass}
									subItems={item.items}
									onAdd={() => addSubItem(index)}
									onChange={(subIndex, v) =>
										updateSubItem(index, subIndex, v)
									}
									onRemove={(subIndex) =>
										removeSubItem(index, subIndex)
									}
								/>
							}
						/>

						<RemoveButtonCross
							handleClick={() => removeItem(index)}
						/>
					</div>
				);
			})}

			<Button
				isPrimary
				onClick={addItem}
				className="dm-button dm-admin-button"
			>
				{items.length ? 'Add item' : 'Add first item'}
			</Button>
		</div>
	);
};

export default memo(ItemsList);
