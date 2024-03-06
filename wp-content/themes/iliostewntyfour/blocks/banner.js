import { registerBlockType } from '@wordpress/blocks';
import { TextControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

registerBlockType('jaca/melao-block', {
    title: __('Jaca block', 'jaca-melao'),
    icon: 'smiley',
    category: 'common',
    attributes: {
        content: {
            type: 'string',
            source: 'html',
            selector: 'p',
        },
    },

    edit: (props) => {
        const { attributes, setAttributes } = props;
        return (
           <ul>
               <li>Jaca 1</li>
               <li>Jaca 3</li>
               <li>Jaca 4</li>
           </ul>
        );
    },

    save: (props) => {
        return <p>{props.attributes.content}</p>;
    },
});