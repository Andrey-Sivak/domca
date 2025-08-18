import { RichText } from '@wordpress/block-editor';
import {
	Button,
	PanelBody,
	PanelRow,
	TextControl,
	Panel,
	Card,
	CardHeader,
	CardBody,
	__experimentalVStack as VStack,
} from '@wordpress/components';

const FAQList = ({ questions, setAttributes }) => {
	const addItem = () => {
		setAttributes({
			items: [
				...questions,
				{
					id: Date.now(),
					question: '',
					answer: '',
				},
			],
		});
	};

	const removeItem = (index) => {
		const newItems = [...questions];
		newItems.splice(index, 1);
		setAttributes({ items: newItems });
	};

	const handleQuestionChange = (index, newQuestion) => {
		const newQuestions = [...questions];
		newQuestions[index] = { ...newQuestions[index], question: newQuestion };
		setAttributes({ items: newQuestions });
	};

	const handleAnswerChange = (index, newAnswer) => {
		const newQuestions = [...questions];
		newQuestions[index] = { ...newQuestions[index], answer: newAnswer };
		setAttributes({ items: newQuestions });
	};

	const getPanelTitle = (idx, question = '') =>
		question ? `${idx + 1}. ${question}` : 'New Question';

	return (
		<Card>
			<CardHeader>
				<p className="dm-admin-section-title">Questions List</p>
			</CardHeader>
			<CardBody>
				<VStack spacing="5">
					{questions.length > 0 ? (
						<div className="faq-items">
							{questions.map((item, index) => (
								<Panel key={index}>
									<PanelBody
										title={getPanelTitle(
											index,
											item.question,
										)}
										initialOpen={false}
									>
										<PanelRow>
											<VStack
												spacing="3"
												style={{ width: '100%' }}
											>
												<TextControl
													label="Question"
													value={item.question}
													onChange={(newQuestion) =>
														handleQuestionChange(
															index,
															newQuestion,
														)
													}
													placeholder="Input question..."
												/>
												<div className="dm-admin-rich-text-wrap">
													<RichText
														label="Answer"
														tagName="p"
														value={item.answer}
														onChange={(newAnswer) =>
															handleAnswerChange(
																index,
																newAnswer,
															)
														}
														placeholder="Input answer..."
													/>
												</div>
												<Button
													isDestructive
													onClick={() =>
														removeItem(index)
													}
												>
													Remove Question
												</Button>
											</VStack>
										</PanelRow>
									</PanelBody>
								</Panel>
							))}
						</div>
					) : (
						<p className="dm-admin-section-note">
							No questions added yet. Add your first question
							below.
						</p>
					)}

					<Button
						onClick={addItem}
						isPrimary
						className="dm-button dm-admin-button"
					>
						Add Question
					</Button>
				</VStack>
			</CardBody>
		</Card>
	);
};

export default FAQList;
