import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import Roadmap from './Roadmap.js';
import Flag from './Flag.js';

const Steps = ({ setAttributes, items, baseClass }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ steps: newItems });
	};

	const updateItemPeriod = (index, newText) => {
		const newItems = [...items];
		newItems[index].period = newText;
		setAttributes({ steps: newItems });
	};

	const addItem = () => {
		const newItems = [...items, { text: '', period: '' }];
		setAttributes({ steps: newItems });
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ steps: newItems });
	};

	return (
		<div className={`${baseClass}__steps`}>
			<Roadmap />
			{items.map((item, index) => (
				<div
					key={index}
					className={`${baseClass}__step dm-step-${index + 1}`}
				>
					{index % 2 === 0 && <Flag baseClass={baseClass} />}
					<div>
						<RichText
							tagName="p"
							className={`${baseClass}__step-period`}
							value={item.period}
							onChange={(newText) =>
								updateItemPeriod(index, newText)
							}
							placeholder="Input step period..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__step-text`}
							value={item.text}
							onChange={(newText) =>
								updateItemText(index, newText)
							}
							placeholder="Input step text..."
						/>
					</div>
					{index % 2 !== 0 && <Flag baseClass={baseClass} />}
					<RemoveButtonCross handleClick={() => removeItem(index)} />
				</div>
			))}

			{items.length < 5 && (
				<Button
					isPrimary
					onClick={addItem}
					className="dm-button dm-admin-button"
				>
					{items.length ? 'Add Step' : 'Add First Step'}
				</Button>
			)}
		</div>
	);
};

export default Steps;
