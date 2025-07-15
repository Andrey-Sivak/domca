import { RichText } from '@wordpress/block-editor';

const ItemList = ({ baseClass, setAttributes, items }) => {
	const updateItem = (index, field, value) => {
		const newItems = [...items];
		newItems[index] = { ...newItems[index], [field]: value };
		setAttributes({ steps: newItems });
	};

	return (
		<div className={`${baseClass}__items`}>
			{items.map((item, index) => (
				<div key={index} className={`${baseClass}__item`}>
					<div className={`${baseClass}__item-content`}>
						<RichText
							tagName="p"
							className={`${baseClass}__item-title`}
							value={item.title}
							onChange={(value) =>
								updateItem(index, 'title', value)
							}
							placeholder="Reset title..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__item-text`}
							value={item.text}
							onChange={(value) =>
								updateItem(index, 'text', value)
							}
							placeholder="Season/timing..."
						/>
					</div>
				</div>
			))}
		</div>
	);
};

export default ItemList;
