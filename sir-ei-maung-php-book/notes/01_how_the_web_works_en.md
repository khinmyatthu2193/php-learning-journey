# Chapter 1 — How the Web Works 🌐 (English)

## 1. What is the World Wide Web (WWW)?

The **World Wide Web** is a collection of web pages and websites that we open using a web browser, such as Chrome or Firefox.

- **Internet:** The worldwide network connecting computers and devices.

- **Web (WWW):** One service that uses the Internet. Websites and web pages belong to the Web.

- **Browser:** Software that helps us visit web pages.

**Example:** When you open `https://example.com`, your browser uses the Internet to access a page on the Web.

**Remember:** Internet ≠ Web. The Web runs **on** the Internet.

## 2. Website vs. Web Application

| Website | Web application |
|---|---|
| Mainly provides information or content | Mainly lets users perform tasks |
| Example: a simple news or information page | Example: an online classroom or rental management system |
| Often focuses on reading and browsing | Often includes forms, accounts, and data updates |

**Important:** This is a useful beginner distinction, not a strict rule. Many modern websites are also web applications.

## 3. Three Main Parts of Web Communication

1. **Client** — requests information or a service.

2. **Server** — receives the request and sends a response.

3. **Protocol** — rules for communication (for example, HTTP).

```text

CLIENT  -- HTTP Request -->  SERVER

CLIENT  <-- HTTP Response -- SERVER

          (communication rules: HTTP)

```

### 3.1 Client: User, Device, User Agent

- **User:** The person using the Web.

- **Device:** The phone, laptop, or computer they use.

- **User agent:** Software acting for the user, usually a web browser such as Chrome.

**Example:** You (user) use a laptop (device) and Chrome (user agent) to visit a website.

### 3.2 Server: Server Computer and Server Software

- **Server computer:** The physical or virtual machine that provides resources.

- **Server software:** A program that listens for requests and sends responses (for example, Apache or Nginx).

**PHP's role:** PHP code can run on the server to create a response. PHP is not itself the same thing as Apache or Nginx.

### 3.3 Protocol

A **protocol** is a set of rules that devices follow to communicate.

- **HTTP:** Rules for web requests and responses.

- **HTTPS:** HTTP protected by encryption using TLS.

## 4. How Does the Web Work?

Example: You visit a PHP page.

```text

1. You enter a URL in your browser.

                ↓

2. The browser finds the server and connects to it.

                ↓

3. The browser sends an HTTP request.

                ↓

4. The server handles the request.

   (PHP may run and read a database.)

                ↓

5. The server sends an HTTP response.

                ↓

6. The browser displays the result.

```

**Key point:** Your browser receives the **result** of PHP execution (often HTML), not the server's original PHP source code.

## 5. HTTP Requests and Responses

**HTTP** stands for **Hypertext Transfer Protocol**. It defines how clients and servers exchange messages.

### Request

A request asks the server to do something.

```http

GET /hello HTTP/1.1

Host: example.com

Accept: text/html

```

- **Method (`GET`):** What action is requested.

- **Path (`/hello`):** Which resource is requested.

- **Headers:** Extra information about the request.

- **Body (optional):** Data sent with some requests, such as form or JSON data.

Common methods:

| Method | Simple meaning |
|---|---|
| GET | Get information |
| POST | Submit data for processing |
| PUT | Create or replace a resource |
| PATCH | Partially update a resource |
| DELETE | Request removal of a resource |

### Response

The response tells the client what happened and may include content.

```http

HTTP/1.1 200 OK

Content-Type: text/html; charset=UTF-8

\<h1>Hello!\</h1>

```

- **Status code:** The result of the request.

- **Response headers:** Information about the returned content.

- **Response body:** The actual content (HTML, JSON, an image, etc.).

Common status codes:

| Code | Meaning |
|---|---|
| 200 | OK — request succeeded |
| 301 | Moved permanently |
| 400 | Bad request |
| 401 | Authentication required |
| 403 | Forbidden |
| 404 | Not found |
| 500 | Internal server error |

## 6. What Are HTTP Headers?

**Headers** are pieces of extra information included in HTTP messages.

| Request header | Purpose |
|---|---|
| `Host` | Which website the client wants |
| `Accept` | Types of content the client can accept |
| `Authorization` | Credentials for accessing protected resources |
| `Cookie` | Cookies the browser sends to the server |
| Response header | Purpose |
|---|---|
| `Content-Type` | Type of returned data, such as HTML or JSON |
| `Cache-Control` | Rules for caching the response |
| `Set-Cookie` | Tells the browser to store a cookie |
| `Content-Length` | Size of the response body in bytes, when provided |

**Remember:** Headers describe the message; the body carries the main content.

## 7. HTTP Is Stateless

**Stateless** means each HTTP request is treated independently. HTTP itself does not automatically remember earlier requests.

**Example:**

```text

Request 1: "Show the login page."

Request 2: "Show my profile."

```

The second request does not automatically carry the memory of the first. Websites use **cookies, sessions, or tokens** to keep track of users across requests.

### Advantages

- Simpler request handling.

- Easier to spread requests across multiple servers.

- Each request can be handled independently.

### Disadvantages

- Login state and shopping carts need extra mechanisms.

- Cookies, sessions, and tokens add development and security responsibilities.

**Remember:** HTTP is stateless, but websites can still remember you by adding state-management mechanisms.

## 8. HTTP Is Usually Pull-Based

**Pull-based** means the client normally starts the communication by requesting information from the server.

```text

Browser: "Any new messages?"  --> Server

Browser: <-- "Here are the messages."

```

### Advantages

- The client decides when to request data.

- Simple and predictable for normal web pages.

- No need to send updates when nobody asks for them.

### Disadvantages

- The client may need to request repeatedly to check for updates (**polling**).

- Repeated polling can waste requests and delay updates.

**Important exception:** Modern web apps can receive near-real-time updates using **WebSockets**, **Server-Sent Events (SSE)**, or HTTP/2 and HTTP/3 streaming features. So “pull-based” is a good description of the **normal request–response pattern**, not a rule that servers can never send ongoing updates.

## 9. HTTP Versions

| Version | Key idea |
|---|---|
| HTTP/0.9 | Very simple early version |
| HTTP/1.0 | Introduced richer request and response features |
| HTTP/1.1 | Improved persistent connections and other features |
| HTTP/2 | Multiplexes many requests over one TCP connection |
| HTTP/3 | Uses QUIC over UDP, improving connection behavior on some networks |

**HTTP/3 is the latest standardized major HTTP version (as of October 2026).** HTTP/1.1 and HTTP/2 are still used.

Your browser and the server negotiate which version to use. A browser supporting HTTP/3 may still connect with HTTP/2.

**Check in Chrome:** `F12` → **Network** → right-click a column heading → enable **Protocol** → reload.

- `http/1.1` = HTTP/1.1

- `h2` = HTTP/2

- `h3` = HTTP/3

## 10. Quick Review — English

1. **WWW?** Web pages and websites accessed through browsers over the Internet.

2. **Internet vs Web?** Internet = network; Web = service using the network.

3. **Three web communication parts?** Client, server, protocol.

4. **Client parts?** User, device, user agent.

5. **Server parts?** Server computer, server software.

6. **HTTP?** Rules for web requests and responses.

7. **Header?** Extra information about a request or response.

8. **Stateless?** HTTP does not automatically remember previous requests.

9. **Pull-based?** Usually the client asks first.

10. **Latest major HTTP version?** HTTP/3.

---

---

## Self-Test ✍️

Try answering without looking at the notes:

1. What is the difference between the Internet and the Web?

2. Why is a browser called a user agent?

3. What is the difference between a request header and a response body?

4. If HTTP is stateless, how does a website remember that you logged in?

5. Why might Chrome show `h2` even if Chrome supports HTTP/3?

**Learning tip:** Explain each answer aloud in your own words. If you can explain it simply, you probably understand it.
