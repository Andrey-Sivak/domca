import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ReviewBg from './ReviewBg.js';

const ReviewList = ({ setAttributes, items, baseClass }) => {
	const updateItem = (index, property, value) => {
		const newItems = [...items];
		newItems[index] = {
			...newItems[index],
			[property]: value,
		};
		setAttributes({ items: newItems });
	};

	const addItem = () => {
		const newItems = [
			...items,
			{
				text: '',
				author: '',
			},
		];
		setAttributes({ items: newItems });
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ items: newItems });
	};

	return (
		<div className={`${baseClass}__list dm-admin`}>
			{items.map((item, index) => (
				<div key={index} className={`${baseClass}__item`}>
					<ReviewBg baseClass={baseClass} />
					<div key={index} className={`${baseClass}__item-content`}>
						<RichText
							tagName="p"
							className={`${baseClass}__item-text`}
							value={item.text}
							onChange={(newText) =>
								updateItem(index, 'text', newText)
							}
							placeholder="Input review text..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__item-author`}
							value={item.author}
							onChange={(newAuthor) =>
								updateItem(index, 'author', newAuthor)
							}
							placeholder="Input review author..."
						/>
					</div>

					<RemoveButtonCross
						color="red"
						handleClick={() => removeItem(index)}
					/>
				</div>
			))}
			<Button
				isPrimary
				onClick={addItem}
				className="dm-button dm-admin-button"
			>
				{items.length ? 'Add Review' : 'Add First Review'}
			</Button>
		</div>
	);
};

export default ReviewList;
