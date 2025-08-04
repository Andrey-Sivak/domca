import { RichText } from '@wordpress/block-editor';
import {
	Button,
	PanelBody,
	PanelRow,
	TextControl,
	Panel,
	__experimentalVStack as VStack,
} from '@wordpress/components';

const Question = ({ question, onChange, onRemove, index }) => {
	const handleQuestionChange = (newQuestion) => {
		onChange({ ...question, question: newQuestion });
	};

	const handleAnswerChange = (newAnswer) => {
		onChange({ ...question, answer: newAnswer });
	};

	return (
		<Panel>
			<PanelBody
				title={
					question.question
						? `${index + 1}. ${question.question}`
						: 'New Question'
				}
				initialOpen={false}
			>
				<PanelRow>
					<VStack spacing="3" style={{ width: '100%' }}>
						<TextControl
							label="Question"
							value={question.question}
							onChange={handleQuestionChange}
							placeholder="Input question..."
						/>
						<div className="dm-admin-rich-text-wrap">
							<RichText
								label="Answer"
								tagName="p"
								value={question.answer}
								onChange={handleAnswerChange}
								placeholder="Input answer..."
							/>
						</div>
						<Button isDestructive onClick={onRemove}>
							Remove Question
						</Button>
					</VStack>
				</PanelRow>
			</PanelBody>
		</Panel>
	);
};

export default Question;
