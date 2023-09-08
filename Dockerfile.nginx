# Use the official Nginx image as a base image
FROM nginx:latest

# Remove the default Nginx configuration
RUN rm /etc/nginx/conf.d/default.conf

# Copy your Nginx configuration file (if any)
# COPY nginx/nginx.conf /etc/nginx/conf.d/

# Expose ports
EXPOSE 80

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]
