const NoteCheckIcon = ({ baseClass }) => (
	<svg
		width="30"
		height="30"
		viewBox="0 0 30 30"
		fill="none"
		className={`${baseClass}__note-icon}`}
	>
		<rect width="30" height="30" rx="15" fill="#817676" />
		<path
			d="M9 15L12.9 19L22 11"
			stroke="white"
			strokeWidth="1.5"
			strokeLinecap="round"
			strokeLinejoin="round"
		/>
	</svg>
);

export default NoteCheckIcon;
