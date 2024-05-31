const products = {
    "Performance Starting Kit": { // not used yett did not work
        title: "Performance Starting Kit",
        content: `
            <p><strong>Package Content:</strong></p>
            <ul>
                <li>Upgraded exhaust system for improved engine breathing</li>
                <li>High-flow air intake for increased horsepower</li>
                <li>Sport-tuned suspension for enhanced handling</li>
            </ul>
            <p><strong>Improvements:</strong></p>
            <ul>
                <li>Increased horsepower and torque</li>
                <li>Improved acceleration and throttle response</li>
                <li>Enhanced exhaust note for a sportier sound</li>
            </ul>
        `,
    },
    "Exterior Enhancement": {
        title: "Exterior Enhancement",
        content: `
            <p><strong>Package Content:</strong></p>
            <ul>
                <li>Custom carbon fiber body panels for a lightweight and stylish look</li>
                <li>Upgraded aerodynamic features for improved performance</li>
                <li>Premium paint and detailing for a personalized exterior</li>
            </ul>
            <p><strong>Improvements:</strong></p>
            <ul>
                <li>Enhanced visual appeal with custom carbon fiber fittings</li>
                <li>Improved aerodynamics for better handling</li>
                <li>Personalized exterior look with premium paint and detailing</li>
            </ul>
        `,
    },
    "Full Car Facelift": {
        title: "Full Car Facelift",
        content: `
            <p><strong>Package Content:</strong></p>
            <ul>
                <li>Complete overhaul of exterior and interior components</li>
                <li>Upgraded lighting systems for improved visibility</li>
                <li>Custom upholstery and interior detailing</li>
            </ul>
            <p><strong>Improvements:</strong></p>
            <ul>
                <li>Transformed exterior appearance with a full facelift</li>
                <li>Enhanced visibility and safety with upgraded lighting systems</li>
                <li>Luxurious and customized interior with custom upholstery</li>
            </ul>
        `,
    },
    "Track Day Performance Bundle": {
        title: "Track Day Performance Bundle",
        content: `
            <p><strong>Package Content:</strong></p>
            <ul>
                <li>High-performance brakes for superior stopping power</li>
                <li>Adjustable suspension for optimal track handling</li>
                <li>Lightweight alloy wheels for reduced unsprung weight</li>
            </ul>
            <p><strong>Improvements:</strong></p>
            <ul>
                <li>Improved braking performance for track conditions</li>
                <li>Optimized suspension for superior handling on the track</li>
                <li>Reduced unsprung weight for enhanced agility</li>
            </ul>
        `,
    },
    "Performance Enthusiast Bundle": {
        title: "Performance Enthusiast Bundle",
        content: `
            <p><strong>Package Content:</strong></p>
            <ul>
                <li>Performance exhaust system for a deep and aggressive tone</li>
                <li>Cold air intake for increased horsepower</li>
                <li>Sport-tuned suspension for a thrilling driving experience</li>
            </ul>
            <p><strong>Improvements:</strong></p>
            <ul>
                <li>Enhanced exhaust note for a more aggressive sound</li>
                <li>Increased horsepower and improved throttle response</li>
                <li>Sport-tuned suspension for a thrilling and responsive ride</li>
            </ul>
        `,
    },
    "Off-Road Adventure Bundle": {
        title: "Off-Road Adventure Bundle",
        content: `
            <p><strong>Package Content:</strong></p>
            <ul>
                <li>Off-road tires and lift kit for increased ground clearance</li>
                <li>Skid plates and off-road lighting for rugged terrains</li>
                <li>Winch and recovery gear for off-road adventures</li>
            </ul>
            <p><strong>Improvements:</strong></p>
            <ul>
                <li>Increased ground clearance for tackling rough terrains</li>
                <li>Enhanced protection with skid plates and off-road lighting</li>
                <li>Prepared for off-road challenges with winch and recovery gear</li>
            </ul>
        `,
    },
};

function openPopup(productName) {
    const product = products[productName];
    if (product) {
        document.getElementById("popup-title").innerHTML = product.title;
        document.getElementById("popup-content").innerHTML = product.content;
        document.getElementById("overlay").style.display = "block";
        document.getElementById("popup").style.display = "block";
    } else {
        console.error(`Product details not found for ${productName}`);
    }
}

function closePopup() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("popup").style.display = "none";
}

// not used yett
document.getElementById("btnPerformanceStartingKit").addEventListener("click", function() {
    openPopup("Performance Starting Kit");
});