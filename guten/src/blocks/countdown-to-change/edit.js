import {
	InspectorControls,
	useBlockProps,
	RichText,
} from '@wordpress/block-editor';
import { PanelBody, DatePicker } from '@wordpress/components';
import { Fragment } from '@wordpress/element';
import DecorBgSvg from './DecorBgSvg.js';
import CalendarIcon from './CalendarIcon.js';
import ClockIcon from './ClockIcon.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { text, ctaText, button1, button2, dateStart, weBegin, daysToGo } =
		attributes;

	const baseClass = 'wp-block-domca-countdown-to-change';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	const formatDate = (dateString) => {
		if (!dateString) return '';
		const date = new Date(dateString);
		return new Intl.DateTimeFormat('en-US', {
			year: 'numeric',
			month: 'long',
			day: 'numeric',
		}).format(date);
	};

	const calculateDaysToGo = (dateString) => {
		if (!dateString) return '';
		const targetDate = new Date(dateString);
		const today = new Date();
		const diffTime = targetDate - today;
		const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
		return diffDays > 0 ? diffDays : 0;
	};

	const formattedDate = formatDate(dateStart);
	const daysRemaining = calculateDaysToGo(dateStart);

	return (
		<Fragment>
			<InspectorControls>
				<PanelBody title="Countdown Settings">
					<DatePicker
						currentDate={dateStart}
						onChange={(newDate) =>
							setAttributes({ dateStart: newDate })
						}
					/>
				</PanelBody>
			</InspectorControls>

			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<div className={`${baseClass}__content-left`}>
						<RichText
							tagName="p"
							className={`${baseClass}__text`}
							value={text}
							onChange={(newText) =>
								setAttributes({ text: newText })
							}
							placeholder="Input section text..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__cta-text`}
							value={ctaText}
							onChange={(newCtaText) =>
								setAttributes({ ctaText: newCtaText })
							}
							placeholder="Input section CTA text..."
						/>
						<div className={`${baseClass}__buttons`}>
							<RichText
								tagName="p"
								className={`${baseClass}__button dm-button dm-button-secondary`}
								value={button1}
								onChange={(newButton1) =>
									setAttributes({ button1: newButton1 })
								}
								placeholder="Button text..."
								allowedFormats={['core/link']}
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__button dm-button dm-button-primary`}
								value={button2}
								onChange={(newButton2) =>
									setAttributes({ button2: newButton2 })
								}
								placeholder="Button text..."
								allowedFormats={['core/link']}
							/>
						</div>
					</div>

					<div className={`${baseClass}__content-right`}>
						<div className={`${baseClass}__we-begin`}>
							<DecorBgSvg baseClass={baseClass} />
							<div className={`${baseClass}__we-begin-content`}>
								<CalendarIcon />
								<div className={`${baseClass}__we-begin-text`}>
									<RichText
										tagName="p"
										className={`${baseClass}__we-begin-text-title`}
										value={weBegin}
										onChange={(newWeBegin) =>
											setAttributes({
												weBegin: newWeBegin,
											})
										}
										placeholder="We Begin:"
									/>{' '}
									<p className={`${baseClass}__date`}>
										{formattedDate ||
											'Set Date in the Side Panel'}
									</p>
								</div>
							</div>
						</div>

						<div className={`${baseClass}__days-to-go`}>
							<DecorBgSvg baseClass={baseClass} />
							<div className={`${baseClass}__days-to-go-content`}>
								<ClockIcon />
								<div
									className={`${baseClass}__days-to-go-text`}
								>
									<p className={`${baseClass}__days-number`}>
										{daysRemaining
											? `${daysRemaining}`
											: '0'}
									</p>{' '}
									<RichText
										tagName="p"
										className={`${baseClass}__days-to-go-text-title`}
										value={daysToGo}
										onChange={(newDaysToGo) =>
											setAttributes({
												daysToGo: newDaysToGo,
											})
										}
										placeholder="Days to Go:"
									/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
