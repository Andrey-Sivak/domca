import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ImageUploader from '../../utils/ImageUploader.js';
import StepImageBg from './StepImageBg.js';
import StepTextBg from './StepTextBg.js';

const StepsList = ({ setAttributes, items, baseClass }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ steps: newItems });
	};

	const updateItemImage = (index, media) => {
		const newItems = [...items];
		newItems[index].image = {
			id: media.id,
			url: media.url,
		};
		setAttributes({ steps: newItems });
	};

	const addItem = () => {
		const newItems = [
			...items,
			{
				text: '',
				image: { id: null, url: '' },
			},
		];
		setAttributes({ steps: newItems });
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ steps: newItems });
	};

	return (
		<div className={`${baseClass}__steps`}>
			{items.map((item, index) => (
				<div key={index} className={`${baseClass}__step`}>
					<div className={`${baseClass}__step-image`}>
						<StepImageBg baseClass={baseClass} />
						<div className={`${baseClass}__step-image-img`}>
							<ImageUploader
								image={item.image?.url}
								onSelect={(media) =>
									updateItemImage(index, media)
								}
								buttonText={`Image for step ${index + 1}`}
							/>
						</div>
					</div>
					<div className={`${baseClass}__step-text`}>
						<StepTextBg baseClass={baseClass} />
						<RichText
							tagName="p"
							className={`${baseClass}__step-text-text`}
							value={item.text}
							onChange={(newText) =>
								updateItemText(index, newText)
							}
							placeholder="Input step text..."
						/>
					</div>

					<RemoveButtonCross handleClick={() => removeItem(index)} />
				</div>
			))}

			{items.length < 4 && (
				<Button
					isPrimary
					onClick={addItem}
					className="dm-button dm-admin-button"
				>
					{items.length ? 'Add Step' : 'Add Step Item'}
				</Button>
			)}
		</div>
	);
};

export default StepsList;
