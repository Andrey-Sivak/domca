import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import {
	Button,
	Card,
	CardHeader,
	CardBody,
	__experimentalVStack as VStack,
} from '@wordpress/components';
import FaqItem from './FaqItem.js';
import './editor.scss';

const Edit = ({ attributes, setAttributes }) => {
	const { items, title } = attributes;

	const baseClass = 'wp-block-domca-faq';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	const updateItem = (index, newItemData) => {
		const newItems = [...items];
		newItems[index] = newItemData;
		setAttributes({ items: newItems });
	};

	const addItem = () => {
		setAttributes({
			items: [
				...items,
				{
					id: Date.now(),
					title: '',
					text: '',
					questions: [],
				},
			],
		});
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ items: newItems });
	};

	return (
		<Fragment>
			<div {...blockProps}>
				<div className="dm-container">
					<RichText
						tagName="p"
						className={`${baseClass}__title dm-heading dm-heading-h2`}
						value={title}
						onChange={(newTitle) =>
							setAttributes({ title: newTitle })
						}
						placeholder="Input section title..."
					/>

					<Card>
						<CardHeader>
							<p className="dm-admin-section-title">
								FAQ Sections
							</p>
						</CardHeader>
						<CardBody>
							<VStack spacing="5">
								{items.length > 0 ? (
									<div className="faq-items">
										{items.map((item, index) => (
											<FaqItem
												key={item.id || index}
												item={item}
												index={index}
												onChange={(newItemData) =>
													updateItem(
														index,
														newItemData,
													)
												}
												onRemove={() =>
													removeItem(index)
												}
											/>
										))}
									</div>
								) : (
									<p className="dm-admin-section-note">
										No FAQ sections added yet. Add your
										first section below.
									</p>
								)}

								<Button
									onClick={addItem}
									isPrimary
									className="dm-button dm-admin-button"
								>
									Add Section
								</Button>
							</VStack>
						</CardBody>
					</Card>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
