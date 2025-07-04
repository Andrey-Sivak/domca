const ImageClipPath = ({ baseClass }) => {
	return (
		<svg className={`${baseClass}__image-clip-path`}>
			<clipPath
				id="home-cta-features-clip-path"
				clipPathUnits="objectBoundingBox"
			>
				<path d="M0,0.084 C0,0.038,0.054,0,0.121,0 H0.879 C0.946,0,1,0.038,1,0.084 V0.916 C1,0.962,0.946,1,0.879,1 H0.121 C0.054,1,0,0.962,0,0.916 V0.084"></path>
			</clipPath>
		</svg>
	);
};

export default ImageClipPath;
