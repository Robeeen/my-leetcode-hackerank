import requests
from bs4 import BeautifulSoup
import pandas as pd

# Step 1: Send a GET request to the website
url = 'https://example.com/products'  # Replace with the target website URL
response = requests.get(url)

# Step 2: Parse the HTML content with BeautifulSoup
soup = BeautifulSoup(response.text, 'html.parser')

# Step 3: Find the elements containing product information
products = soup.find_all('div', class_='product-item')  # Replace with the correct tag and class/ID

# Step 4: Extract the product details
product_data = []
for product in products:
    product_name = product.find('h2', class_='product-name').text.strip()  # Replace with correct tag and class
    product_price = product.find('span', class_='product-price').text.strip()  # Replace with correct tag and class
    
    # Append the data to the list
    product_data.append({
        'Product Name': product_name,
        'Price': product_price
    })

# Step 5: Save the data to a CSV file
df = pd.DataFrame(product_data)
df.to_csv('product_data.csv', index=False)

print("Product data has been saved to 'product_data.csv'")
