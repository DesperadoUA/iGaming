<template>
	<div class="flex flex-col items-center">
		<div class="relative">
			<div class="ep-content">
				<div class="ep-svg-container">
					<svg height="127" width="127" xmlns="http://www.w3.org/2000/svg" class="ep-svg">
						<g class="ep-circle--container">
							<defs></defs>
							<g class="ep-circle" style="transition-timing-function: ease-in-out; transform: rotate(0deg)">
								<circle
									r="60.5"
									cx="63.5"
									cy="63.5"
									stroke="#37A1FC"
									stroke-dasharray=""
									fill="transparent"
									stroke-width="1"
									class="ep-circle--empty"
									style="transition-duration: 700ms; transition-timing-function: ease-in-out"
								></circle>
								<circle
									r="60.5"
									cx="63.5"
									cy="63.5"
									fill="transparent"
									stroke="#37A1FC"
									stroke-width="6"
									stroke-linecap="round"
									stroke-dasharray="380.132711084365"
									class="ep-circle--progress animation__rs"
									style="
										transition: all 700ms ease-in-out 0s, opacity 0.3s 0s;
										stroke-dashoffset: 190.066;
										transform-origin: 50% 50%;
										opacity: 1;
										--ep-circumference: 380.132711084365;
										--ep-negative-circumference: -380.132711084365;
										--ep-double-circumference: 760.26542216873;
										--ep-stroke-offset: 190.0663555421825;
										--ep-loop-stroke-offset: -570.1990666265475;
										--ep-bounce-out-stroke-offset: 90.06635554218249;
										--ep-bounce-in-stroke-offset: 290.06635554218246;
										--ep-reverse-stroke-offset: 950.3317777109124;
										--ep-loading-stroke-offset: 76.026542216873;
										animation-duration: 700ms;
									"
								></circle>
							</g>
						</g>
					</svg>
				</div>
				<div class="ep-legend--container" style="max-width: 127px">
					<div class="ep-legend--value legend-custom-style" style="font-size: 26px; color: rgb(55, 161, 252)">
						<span> <span class="counter">6000</span> </span><span>+</span>
					</div>
				</div>
			</div>
		</div>
		<h5 class="tracking-wide font-medium text-sm leading-4 pl-2 pr-2 mt-8 mb-8 uppercase text-center text-black">
			Available games
		</h5>
	</div>
</template>
