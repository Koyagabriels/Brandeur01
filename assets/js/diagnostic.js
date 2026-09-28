/**
 * Brandeur01 Diagnostic & Contact Wiring JavaScript
 */
document.addEventListener('DOMContentLoaded', function () {
    const diagnosticSelect = document.getElementById('diagnostic-select');
    const diagnosticBtn = document.getElementById('diagnostic-submit-btn');
    const contactSelect = document.getElementById('contact-bottleneck-select');
    const contactBadgeText = document.getElementById('contact-selected-bottleneck-text');
    const contactBadgeContainer = document.getElementById('contact-selected-bottleneck-banner');

    function syncBottleneckSelection(selectedValue, labelText) {
        if (contactSelect) {
            let matched = false;
            for (let i = 0; i < contactSelect.options.length; i++) {
                if (contactSelect.options[i].value === selectedValue || contactSelect.options[i].text === labelText) {
                    contactSelect.selectedIndex = i;
                    matched = true;
                    break;
                }
            }
            if (!matched && selectedValue) {
                // Set fallback value if provided
                contactSelect.value = selectedValue;
            }
        }

        if (contactBadgeText && contactBadgeContainer) {
            const displayLabel = labelText || (contactSelect ? contactSelect.options[contactSelect.selectedIndex]?.text : selectedValue);
            if (displayLabel && displayLabel !== 'Select your bottleneck state...') {
                contactBadgeText.textContent = displayLabel;
                contactBadgeContainer.style.display = 'flex';
            }
        }
    }

    if (diagnosticBtn && diagnosticSelect) {
        diagnosticBtn.addEventListener('click', function (e) {
            e.preventDefault();
            const selectedOption = diagnosticSelect.options[diagnosticSelect.selectedIndex];
            const val = diagnosticSelect.value;
            const text = selectedOption ? selectedOption.text : val;

            syncBottleneckSelection(val, text);

            const contactSection = document.getElementById('contact');
            if (contactSection) {
                contactSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    // Process URL query parameters for dynamic sub-landing redirects
    const urlParams = new URLSearchParams(window.location.search);
    const problemParam = urlParams.get('problem') || urlParams.get('bottleneck');
    if (problemParam) {
        syncBottleneckSelection(problemParam);
    }
});
