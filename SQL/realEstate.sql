CREATE TABLE properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    type VARCHAR(100),
    status VARCHAR(50),
    price DECIMAL(10, 2),
    area VARCHAR(50),
    rooms VARCHAR(50),
    address VARCHAR(255),
    county_state TEXT,
    city VARCHAR(100),
    neighborhood VARCHAR(100),
    zip VARCHAR(20),
    country VARCHAR(100),
    property_id VARCHAR(50),
    area_size VARCHAR(50),
    size_prefix VARCHAR(50),
    land_area VARCHAR(50),
    land_area_postfix VARCHAR(50),
    bedrooms INT,
    bathrooms INT,
    garages INT,
    garages_size VARCHAR(50),
    year_built VARCHAR(10),
    video_url VARCHAR(255),
    virtual_tour VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE amenities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    property_id INT,
    amenity_name VARCHAR(100),
    FOREIGN KEY (property_id) REFERENCES properties(id) ON DELETE CASCADE
);

CREATE TABLE floor_plans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    property_id INT,
    plan_description TEXT,
    plan_bedrooms INT,
    plan_bathrooms INT,
    plan_price DECIMAL(10, 2),
    size_prefix VARCHAR(50),
    plan_size VARCHAR(50),
    plan_image VARCHAR(255),
    FOREIGN KEY (property_id) REFERENCES properties(id) ON DELETE CASCADE
);
