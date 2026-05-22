function initMobileMenu() {
	const toggle = document.querySelector("[data-mobile-menu-toggle]");
	const menu = document.getElementById("mobile-menu");

	if (!toggle || !menu) {
		return;
	}

	const openIcon = toggle.querySelector('[data-menu-icon="open"]');
	const closeIcon = toggle.querySelector('[data-menu-icon="close"]');

	function setMenuState(isOpen) {
		toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
		toggle.setAttribute("aria-label", isOpen ? "Close menu" : "Open menu");
		menu.classList.toggle("hidden", !isOpen);
		document.body.style.overflow = isOpen ? "hidden" : "";

		if (openIcon) {
			openIcon.classList.toggle("hidden", isOpen);
		}

		if (closeIcon) {
			closeIcon.classList.toggle("hidden", !isOpen);
		}
	}

	setMenuState(false);

	toggle.addEventListener("click", () => {
		const isOpen = toggle.getAttribute("aria-expanded") === "true";
		setMenuState(!isOpen);
	});

	menu.querySelectorAll("a").forEach((link) => {
		link.addEventListener("click", () => setMenuState(false));
	});

	document.addEventListener("pointerdown", (event) => {
		const isOpen = toggle.getAttribute("aria-expanded") === "true";
		if (!isOpen) {
			return;
		}

		if (!menu.contains(event.target) && !toggle.contains(event.target)) {
			setMenuState(false);
		}
	});
}

function initAccordions() {
	document.querySelectorAll("[data-accordion]").forEach((accordion) => {
		const items = Array.from(accordion.querySelectorAll("[data-accordion-item]"));

		function getAccordionItemParts(item) {
			return {
				trigger: item.querySelector("[data-accordion-trigger]"),
				panel: item.querySelector("[data-accordion-panel]"),
				panelInner: item.querySelector("[data-accordion-panel-inner]"),
				desktopIcon: item.querySelector("[data-accordion-icon-desktop]"),
				tabletIcon: item.querySelector("[data-accordion-icon-tablet]"),
			};
		}

		function stopPanelTransition(panel) {
			if (panel._latrobeAccordionFrame) {
				window.cancelAnimationFrame(panel._latrobeAccordionFrame);
				panel._latrobeAccordionFrame = null;
			}
		}

		function syncIcons(desktopIcon, tabletIcon, isOpen) {
			if (desktopIcon) {
				desktopIcon.setAttribute(
					"d",
					isOpen
						? "M11.7803 9.78033C11.4874 10.0732 11.0126 10.0732 10.7197 9.78033L8 7.06066L5.28033 9.78033C4.98744 10.0732 4.51256 10.0732 4.21967 9.78033C3.92678 9.48744 3.92678 9.01256 4.21967 8.71967L7.46967 5.46967C7.76256 5.17678 8.23744 5.17678 8.53033 5.46967L11.7803 8.71967C12.0732 9.01256 12.0732 9.48744 11.7803 9.78033Z"
						: "M4.21967 6.21967C4.51256 5.92678 4.98744 5.92678 5.28033 6.21967L8 8.93934L10.7197 6.21967C11.0126 5.92678 11.4874 5.92678 11.7803 6.21967C12.0732 6.51256 12.0732 6.98744 11.7803 7.28033L8.53033 10.5303C8.23744 10.8232 7.76256 10.8232 7.46967 10.5303L4.21967 7.28033C3.92678 6.98744 3.92678 6.51256 4.21967 6.21967Z",
				);
			}

			if (tabletIcon) {
				tabletIcon.setAttribute(
					"d",
					isOpen
						? "M7.78033 4.53033C7.48744 4.82322 7.01256 4.82322 6.71967 4.53033L4 1.81066L1.28033 4.53033C0.987437 4.82322 0.512563 4.82322 0.21967 4.53033C-0.0732232 4.23744 -0.0732232 3.76256 0.21967 3.46967L3.46967 0.21967C3.76256 -0.0732232 4.23744 -0.0732232 4.53033 0.21967L7.78033 3.46967C8.07322 3.76256 8.07322 4.23744 7.78033 4.53033Z"
						: "M4.21967 6.21967C4.51256 5.92678 4.98744 5.92678 5.28033 6.21967L8 8.93934L10.7197 6.21967C11.0126 5.92678 11.4874 5.92678 11.7803 6.21967C12.0732 6.51256 12.0732 6.98744 11.7803 7.28033L8.53033 10.5303C8.23744 10.8232 7.76256 10.8232 7.46967 10.5303L4.21967 7.28033C3.92678 6.98744 3.92678 6.51256 4.21967 6.21967Z",
				);
			}
		}

		function setItemState(item, isOpen) {
			const { trigger, panel, panelInner, desktopIcon, tabletIcon } = getAccordionItemParts(item);

			if (!trigger || !panel || !panelInner) {
				return;
			}

			stopPanelTransition(panel);

			trigger.setAttribute("aria-expanded", isOpen ? "true" : "false");
			panel.setAttribute("aria-hidden", isOpen ? "false" : "true");
			panel.classList.toggle("opacity-100", isOpen);
			panel.classList.toggle("opacity-0", !isOpen);
			syncIcons(desktopIcon, tabletIcon, isOpen);

			const targetHeight = panelInner.offsetHeight;

			if (isOpen) {
				panel.style.height = "0px";
				panel._latrobeAccordionFrame = window.requestAnimationFrame(() => {
					panel.style.height = `${targetHeight}px`;
				});

				const handleOpenEnd = (event) => {
					if (event.target !== panel || event.propertyName !== "height") {
						return;
					}

					panel.style.height = "auto";
					panel.removeEventListener("transitionend", handleOpenEnd);
				};

				panel.addEventListener("transitionend", handleOpenEnd);
				return;
			}

			const currentHeight = panel.offsetHeight || targetHeight;
			panel.style.height = `${currentHeight}px`;
			panel._latrobeAccordionFrame = window.requestAnimationFrame(() => {
				panel.style.height = "0px";
			});
		}

		function closeAll() {
			items.forEach((item) => {
				setItemState(item, false);
			});
		}

		function openItem(item) {
			if (!item || item.hidden) {
				return;
			}

			closeAll();
			setItemState(item, true);
		}

		items.forEach((item) => {
			const { trigger } = getAccordionItemParts(item);

			if (!trigger) {
				return;
			}

			trigger.addEventListener("click", () => {
				const isOpen = trigger.getAttribute("aria-expanded") === "true";
				closeAll();

				if (!isOpen) {
					setItemState(item, true);
				}
			});
		});

		accordion.latrobeAccordion = {
			closeAll,
			openItem,
			getItems: () => items,
		};

		document.addEventListener("pointerdown", (event) => {
			if (!accordion.contains(event.target)) {
				closeAll();
			}
		});
	});
}

function initHeaderAnchorLinks() {
	document.querySelectorAll("[data-nav-link]").forEach((link) => {
		link.addEventListener("click", (event) => {
			const href = link.getAttribute("href") || "";

			if (!href.startsWith("/#")) {
				return;
			}

			const targetId = href.slice(2);
			const target = document.getElementById(targetId);

			if (!target || window.location.pathname !== "/latrobe/home/" && window.location.pathname !== "/home/" && window.location.pathname !== "/") {
				return;
			}

			event.preventDefault();
			window.history.pushState(null, "", href);
			target.scrollIntoView({ behavior: "auto", block: "start" });
		});
	});
}

function initFaqFilters() {
	document.querySelectorAll("[data-faq-filters]").forEach((filterShell) => {
		const scroller = filterShell.querySelector("[data-faq-filter-scroller]");
		const tablist = scroller?.querySelector('[role="tablist"]');
		const prevButton = filterShell.querySelector("[data-faq-filter-prev]");
		const nextButton = filterShell.querySelector("[data-faq-filter-next]");
		const chips = Array.from(filterShell.querySelectorAll("[data-faq-filter]"));
		const faqShell = filterShell.closest("[data-faq-shell]");
		const accordion = faqShell?.querySelector("[data-accordion]");
		const accordionApi = accordion?.latrobeAccordion;
		const items = accordionApi?.getItems?.() ?? [];

		if (!scroller || !tablist || !chips.length || !accordion || !items.length) {
			return;
		}

		function getVisibleItems() {
			return items.filter((item) => !item.hidden);
		}

		function updateChipCounts() {
			chips.forEach((chip) => {
				const filter = chip.dataset.faqFilter ?? "all";
				const countNode = chip.querySelector(".la-chip-count");

				if (!countNode) {
					return;
				}

				if (filter === "all") {
					countNode.textContent = String(items.length);
					return;
				}

				const count = items.filter((item) => {
					const categories = (item.dataset.faqCategories ?? "").split(/\s+/).filter(Boolean);
					return categories.includes(filter);
				}).length;

				countNode.textContent = String(count);
			});
		}

		function updateActiveChip(activeFilter) {
			chips.forEach((chip) => {
				const isActive = (chip.dataset.faqFilter ?? "all") === activeFilter;
				chip.setAttribute("aria-pressed", isActive ? "true" : "false");
				chip.setAttribute("aria-selected", isActive ? "true" : "false");
			});
		}

		function getActiveChipIndex() {
			return chips.findIndex(
				(chip) =>
					chip.getAttribute("aria-selected") === "true" ||
					chip.getAttribute("aria-pressed") === "true",
			);
		}

		function syncChipScrollPadding() {
			const prevInset = prevButton?.offsetWidth ?? 0;
			const nextInset = nextButton?.offsetWidth ?? 0;
			const activeChip = chips[getActiveChipIndex()] ?? chips[0];
			const activeChipWidth = activeChip?.offsetWidth ?? 0;
			const viewportCenter = scroller.clientWidth / 2;
			const baseGap = 8;
			const startPadding = Math.max(prevInset + baseGap, viewportCenter - activeChipWidth / 2);
			const endPadding = Math.max(nextInset + baseGap, viewportCenter - activeChipWidth / 2);

			tablist.style.paddingInlineStart = `${startPadding}px`;
			tablist.style.paddingInlineEnd = `${endPadding}px`;
		}

		function revealChip(chip) {
			const chipIndex = chips.indexOf(chip);

			syncChipScrollPadding();

			if (chipIndex === 0) {
				scroller.scrollTo({
					left: 0,
					behavior: "smooth",
				});
				return;
			}

			const maxScrollLeft = Math.max(0, scroller.scrollWidth - scroller.clientWidth);
			const targetLeft = chip.offsetLeft - (scroller.clientWidth - chip.offsetWidth) / 2;

			scroller.scrollTo({
				left: Math.min(Math.max(0, targetLeft), maxScrollLeft),
				behavior: "smooth",
			});
		}

		function applyFilter(activeFilter) {
			items.forEach((item) => {
				const categories = (item.dataset.faqCategories ?? "").split(/\s+/).filter(Boolean);
				const isMatch = activeFilter === "all" || categories.includes(activeFilter);
				item.hidden = !isMatch;
			});

			updateActiveChip(activeFilter);
			accordionApi?.closeAll?.();
		}

		function updateScrollButton() {
			syncChipScrollPadding();

			const hasOverflow = scroller.scrollWidth > scroller.clientWidth + 4;
			const activeIndex = getActiveChipIndex();
			const atStart = activeIndex <= 0;
			const atEnd = activeIndex >= chips.length - 1;
			if (prevButton) {
				prevButton.disabled = !hasOverflow || atStart;
			}
			if (nextButton) {
				nextButton.disabled = !hasOverflow || atEnd;
			}
		}

		function activateChipByOffset(offset) {
			const activeIndex = getActiveChipIndex();
			const currentIndex = activeIndex >= 0 ? activeIndex : 0;
			const nextIndex = Math.min(
				Math.max(currentIndex + offset, 0),
				chips.length - 1,
			);
			const nextChip = chips[nextIndex];

			if (!nextChip) {
				return;
			}

			applyFilter(nextChip.dataset.faqFilter ?? "all");
			revealChip(nextChip);
		}

		function scrollToNextChip() {
			activateChipByOffset(1);
		}

		function scrollToPrevChip() {
			activateChipByOffset(-1);
		}

		chips.forEach((chip) => {
			chip.addEventListener("click", () => {
				applyFilter(chip.dataset.faqFilter ?? "all");
				revealChip(chip);
			});
		});

		prevButton?.addEventListener("click", scrollToPrevChip);

		nextButton?.addEventListener("click", scrollToNextChip);

		scroller.addEventListener("scroll", updateScrollButton, { passive: true });
		window.addEventListener("resize", updateScrollButton);

		updateChipCounts();
		applyFilter("all");
		syncChipScrollPadding();
		updateScrollButton();
	});
}

function initCoreFeatureGallery() {
	document.querySelectorAll("[data-core-feature-gallery]").forEach((gallery) => {
		const cards = Array.from(
			gallery.querySelectorAll("[data-core-feature-card]"),
		).sort((a, b) => {
			const aOrder = Number.parseInt(a.dataset.revealOrder ?? "-1", 10);
			const bOrder = Number.parseInt(b.dataset.revealOrder ?? "-1", 10);
			return aOrder - bOrder;
		});

		if (!cards.length) {
			return;
		}

		const primaryCard = cards.find((card) => card.dataset.primary === "true");
		const revealCards = cards.filter((card) => card.dataset.primary !== "true");
		const reduceMotionMedia = window.matchMedia("(prefers-reduced-motion: reduce)");
		let hasStarted = false;
		let timers = [];
		let observer;

		function setCardVisible(card, isVisible) {
			card.classList.toggle("la-core-feature-shell--visible", isVisible);
			card.classList.toggle("la-core-feature-shell--hidden", !isVisible);
		}

		function clearTimers() {
			timers.forEach((timerId) => window.clearTimeout(timerId));
			timers = [];
		}

		function resetCards() {
			if (primaryCard) {
				setCardVisible(primaryCard, true);
			}

			revealCards.forEach((card) => setCardVisible(card, false));
		}

		function revealAllCards() {
			cards.forEach((card) => setCardVisible(card, true));
		}

		function runCycle() {
			if (reduceMotionMedia.matches) {
				revealAllCards();
				return;
			}

			clearTimers();
			resetCards();

			const heroOnlyMs = 950;
			const revealStepMs = 180;
			const holdMs = 3400;

			timers.push(
				window.setTimeout(() => {
					revealCards.forEach((card, index) => {
						timers.push(
							window.setTimeout(() => {
								setCardVisible(card, true);
							}, index * revealStepMs),
						);
					});

					timers.push(
						window.setTimeout(
							() => {
								if (hasStarted) {
									runCycle();
								}
							},
							revealCards.length * revealStepMs + holdMs,
						),
					);
				}, heroOnlyMs),
			);
		}

		function handleMotionChange() {
			clearTimers();
			if (reduceMotionMedia.matches) {
				revealAllCards();
			} else if (hasStarted) {
				runCycle();
			} else {
				resetCards();
			}
		}

		resetCards();

		observer = new IntersectionObserver(
			(entries) => {
				const entry = entries[0];
				if (!entry?.isIntersecting || hasStarted) {
					return;
				}

				hasStarted = true;
				if (reduceMotionMedia.matches) {
					revealAllCards();
					return;
				}

				runCycle();
			},
			{ threshold: 0.3 },
		);

		observer.observe(gallery);
		reduceMotionMedia.addEventListener("change", handleMotionChange);
	});
}

function initHowItWorksTimelines() {
	document.querySelectorAll("[data-how-it-works]").forEach((timeline) => {
		const track = timeline.querySelector("[data-how-it-works-track]");
		const fill = timeline.querySelector("[data-how-it-works-fill]");
		const steps = Array.from(timeline.querySelectorAll("[data-how-it-works-step]"));
		const stepRows = Array.from(timeline.querySelectorAll("[data-how-it-works-step-row]"));
		const markerRatio = Number.parseFloat(timeline.dataset.howMarkerRatio || "0.5");

		if (!track || !fill || !steps.length || steps.length !== stepRows.length) {
			return;
		}

		let rafId = 0;

		function setStepState(index, isFilled) {
			const marker = steps[index];
			const row = stepRows[index];

			if (!marker || !row) {
				return;
			}

			marker.dataset.filled = isFilled ? "true" : "false";
			row.dataset.filled = isFilled ? "true" : "false";
			marker.classList.toggle("border-red-100", isFilled);
			marker.classList.toggle("bg-brand-1", isFilled);
			marker.classList.toggle("text-white", isFilled);
			marker.classList.toggle("border-brand-1", !isFilled);
			marker.classList.toggle("bg-white", !isFilled);
			marker.classList.toggle("text-brand-1", !isFilled);
		}

		function updateProgress() {
			const trackRect = track.getBoundingClientRect();
			const markerY = window.innerHeight * markerRatio;
			const fillHeight = Math.min(trackRect.height, Math.max(0, markerY - trackRect.top));

			fill.style.height = `${fillHeight}px`;

			steps.forEach((step, index) => {
				const rect = step.getBoundingClientRect();
				const stepCenter = rect.top + rect.height / 2;
				const isFilled = markerRatio >= 0.7
					? stepCenter - trackRect.top <= fillHeight
					: stepCenter <= markerY;
				setStepState(index, isFilled);
			});
		}

		function onScroll() {
			window.cancelAnimationFrame(rafId);
			rafId = window.requestAnimationFrame(updateProgress);
		}

		updateProgress();
		window.addEventListener("scroll", onScroll, { passive: true });
		window.addEventListener("resize", onScroll);
	});
}

function initCf7MultiStepForms() {
	document.querySelectorAll("[data-cf7-multistep]").forEach((shell) => {
		const form = shell.closest(".wpcf7-form");
		const cf7Wrapper = shell.closest(".wpcf7");
		const steps = Array.from(shell.querySelectorAll("[data-form-step]"));

		if (!form || !cf7Wrapper || steps.length < 2) {
			return;
		}

		let currentStepIndex = Math.max(
			0,
			steps.findIndex((step) => step.classList.contains("is-active")),
		);

		function getStepFields(step) {
			return Array.from(
				step.querySelectorAll(
					'input:not([type="hidden"]):not([type="button"]):not([type="submit"]), select, textarea',
				),
			);
		}

		function clearFieldError(field) {
			const control = field.closest(".wpcf7-form-control-wrap") || field;
			control.classList.remove("la-field-error");
		}

		function markFieldError(field) {
			const control = field.closest(".wpcf7-form-control-wrap") || field;
			control.classList.add("la-field-error");
		}

		function syncStepAvailability() {
			steps.forEach((step, index) => {
				const isActive = index === currentStepIndex;
				step.classList.toggle("is-active", isActive);
				step.hidden = !isActive;
				step.setAttribute("aria-hidden", isActive ? "false" : "true");

				step.querySelectorAll('button, input[type="submit"]').forEach((button) => {
					button.disabled = !isActive;
				});
			});
		}

		function showStep(nextIndex) {
			currentStepIndex = Math.max(0, Math.min(nextIndex, steps.length - 1));
			syncStepAvailability();
			shell.dataset.currentStep = String(currentStepIndex + 1);
			const activeStep = steps[currentStepIndex];
			const heading = activeStep.querySelector("[data-step-heading]");

			if (heading) {
				heading.scrollIntoView({ behavior: "smooth", block: "nearest" });
			}
		}

		function validateStep(step) {
			const fields = getStepFields(step);
			let firstInvalidField = null;

			fields.forEach((field) => {
				clearFieldError(field);

				if (field.checkValidity()) {
					return;
				}

				if (!firstInvalidField) {
					firstInvalidField = field;
				}

				markFieldError(field);
				field.reportValidity();
			});

			if (firstInvalidField) {
				firstInvalidField.focus({ preventScroll: true });
				return false;
			}

			return true;
		}

		shell.addEventListener("click", (event) => {
			const nextButton = event.target.closest("[data-form-next]");
			const prevButton = event.target.closest("[data-form-prev]");

			if (nextButton) {
				event.preventDefault();

				if (validateStep(steps[currentStepIndex])) {
					showStep(currentStepIndex + 1);
				}

				return;
			}

			if (prevButton) {
				event.preventDefault();
				showStep(currentStepIndex - 1);
			}
		});

		form.addEventListener("input", (event) => {
			const field = event.target;

			if (!(field instanceof Element)) {
				return;
			}

			clearFieldError(field);
		});

		form.addEventListener("change", (event) => {
			const field = event.target;

			if (!(field instanceof Element)) {
				return;
			}

			clearFieldError(field);
		});

		cf7Wrapper.addEventListener("wpcf7invalid", () => {
			const invalidField = form.querySelector(".wpcf7-not-valid");
			if (!invalidField) {
				return;
			}

			const targetStepIndex = steps.findIndex((step) => step.contains(invalidField));
			if (targetStepIndex >= 0) {
				showStep(targetStepIndex);
				markFieldError(invalidField);
			}
		});

		cf7Wrapper.addEventListener("wpcf7mailsent", () => {
			form.reset();
			showStep(0);
		});

		showStep(currentStepIndex);
	});
}

document.addEventListener("DOMContentLoaded", () => {
	initMobileMenu();
	initAccordions();
	initHeaderAnchorLinks();
	initFaqFilters();
	initCoreFeatureGallery();
	initHowItWorksTimelines();
	initCf7MultiStepForms();
});
