import {
	Button,
	PanelBody,
	PanelRow,
	TextControl,
	Panel,
	__experimentalVStack as VStack,
} from '@wordpress/components';
import Question from './Question.js';

const FaqItem = ({ item, onChange, onRemove, index }) => {
	const { title, text, questions } = item;

	const handleTitleChange = (newTitle) => {
		onChange({ ...item, title: newTitle });
	};

	const handleTextChange = (newText) => {
		onChange({ ...item, text: newText });
	};

	const updateQuestion = (index, newQuestionData) => {
		const newQuestions = [...questions];
		newQuestions[index] = newQuestionData;
		onChange({ ...item, questions: newQuestions });
	};

	const addQuestion = () => {
		const newQuestions = [
			...questions,
			{
				id: Date.now(),
				question: '',
				answer: '',
			},
		];
		onChange({ ...item, questions: newQuestions });
	};

	const removeQuestion = (index) => {
		const newQuestions = [...questions];
		newQuestions.splice(index, 1);
		onChange({ ...item, questions: newQuestions });
	};

	return (
		<Panel>
			<PanelBody
				title={title ? `${index + 1}. ${title}` : 'New FAQ Section'}
				initialOpen={false}
			>
				<PanelRow>
					<VStack spacing="4" style={{ width: '100%' }}>
						<TextControl
							label="Section Title"
							value={title}
							onChange={handleTitleChange}
							placeholder="Input section title..."
						/>
						<TextControl
							label="Section Text"
							value={text}
							onChange={handleTextChange}
							placeholder="Input section text..."
						/>

						<h5 className="dm-admin-section-subtitle">Questions</h5>

						{questions.length > 0 ? (
							<VStack spacing="3">
								{questions.map((q, index) => (
									<Question
										key={q.id || index}
										index={index}
										question={q}
										onChange={(newData) =>
											updateQuestion(index, newData)
										}
										onRemove={() => removeQuestion(index)}
									/>
								))}
							</VStack>
						) : (
							<p className="dm-admin-section-note">
								No questions in this section yet.
							</p>
						)}

						<Button
							onClick={addQuestion}
							isPrimary
							className="dm-button dm-admin-button"
						>
							Add Question
						</Button>
						<Button isDestructive onClick={onRemove}>
							Remove Section
						</Button>
					</VStack>
				</PanelRow>
			</PanelBody>
		</Panel>
	);
};

export default FaqItem;
