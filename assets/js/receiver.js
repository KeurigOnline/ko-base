/**
 * Preview Receiver
 * Listens for postMessage events from the editor and updates the DOM accordingly
 */

(function() {
    'use strict';

    // Listen for postMessage events
    window.addEventListener('message', function(event) {
        // Security check: verify the origin if needed
        // Uncomment and modify if you want to restrict to specific origins:
        // const allowedOrigins = ['https://keurigonline.nl', 'https://cms.keurigonline.nl'];
        // if (!allowedOrigins.includes(event.origin)) {
        //     return;
        // }

        const data = event.data;

        // Check if this is an update message
        if (!data || !data.type) {
            return;
        }

        switch (data.type) {
            case 'updateContent':
                handleContentUpdate(data);
                break;

            case 'updateHTML':
                handleHTMLUpdate(data);
                break;

            case 'updateAttribute':
                handleAttributeUpdate(data);
                break;

            case 'updateStyle':
                handleStyleUpdate(data);
                break;

            case 'addClass':
                handleAddClass(data);
                break;

            case 'removeClass':
                handleRemoveClass(data);
                break;

            case 'reload':
                handleReload(data);
                break;

            default:
                console.warn('Unknown message type:', data.type);
        }
    });

    /**
     * Update text content of an element
     */
    function handleContentUpdate(data) {
        if (!data.selector || data.content === undefined) {
            return;
        }

        const element = document.querySelector(data.selector);
        if (element) {
            element.textContent = data.content;
        }
    }

    /**
     * Update HTML content of an element
     */
    function handleHTMLUpdate(data) {
        if (!data.selector || data.html === undefined) {
            return;
        }

        const element = document.querySelector(data.selector);
        if (element) {
            element.innerHTML = data.html;
        }
    }

    /**
     * Update an attribute of an element
     */
    function handleAttributeUpdate(data) {
        if (!data.selector || !data.attribute) {
            return;
        }

        const element = document.querySelector(data.selector);
        if (element) {
            if (data.value === null || data.value === undefined) {
                element.removeAttribute(data.attribute);
            } else {
                element.setAttribute(data.attribute, data.value);
            }
        }
    }

    /**
     * Update inline styles of an element
     */
    function handleStyleUpdate(data) {
        if (!data.selector || !data.styles) {
            return;
        }

        const element = document.querySelector(data.selector);
        if (element) {
            Object.keys(data.styles).forEach(function(property) {
                element.style[property] = data.styles[property];
            });
        }
    }

    /**
     * Add a class to an element
     */
    function handleAddClass(data) {
        if (!data.selector || !data.className) {
            return;
        }

        const element = document.querySelector(data.selector);
        if (element) {
            element.classList.add(data.className);
        }
    }

    /**
     * Remove a class from an element
     */
    function handleRemoveClass(data) {
        if (!data.selector || !data.className) {
            return;
        }

        const element = document.querySelector(data.selector);
        if (element) {
            element.classList.remove(data.className);
        }
    }

    /**
     * Reload the page or a specific section
     */
    function handleReload(data) {
        if (data.selector) {
            // Reload specific section - would need server-side support
            console.info('Section reload requested for:', data.selector);
        } else {
            // Full page reload
            window.location.reload();
        }
    }

    // Send ready message to parent window (if in iframe)
    if (window.parent !== window) {
        window.parent.postMessage({
            type: 'receiverReady',
            url: window.location.href
        }, '*');
    }

})();
