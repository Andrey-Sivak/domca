import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ImagesList from './ImagesList.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { name, credentials, location, email, instagram, images } =
		attributes;

	const baseClass = 'wp-block-domca-about-slider';

	const blockProps = useBlockProps({
		className: baseClass,
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<div className={`${baseClass}__info`}>
						<RichText
							tagName="p"
							className={`${baseClass}__name`}
							value={name}
							onChange={(newName) =>
								setAttributes({ name: newName })
							}
							placeholder="Input name..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__credentials`}
							value={credentials}
							onChange={(newCredentials) =>
								setAttributes({ credentials: newCredentials })
							}
							placeholder="Input credentials..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__location`}
							value={location}
							onChange={(newLocation) =>
								setAttributes({ location: newLocation })
							}
							placeholder="Input location..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__email`}
							value={email}
							onChange={(newEmail) =>
								setAttributes({ email: newEmail })
							}
							placeholder="Input email..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__instagram`}
							value={instagram}
							onChange={(newInstagram) =>
								setAttributes({ instagram: newInstagram })
							}
							placeholder="Input instagram..."
						/>
					</div>

					<ImagesList
						images={images}
						setAttributes={setAttributes}
						baseClass={baseClass}
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
