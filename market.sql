USE [market]
GO
/****** Object:  Table [dbo].[cart]    Script Date: 05/08/2022 23:40:38 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cart](
	[id_cart] [int] IDENTITY(1,1) NOT NULL,
	[product] [int] NOT NULL,
	[quantity] [int] NOT NULL,
	[value] [float] NOT NULL,
	[total] [float] NOT NULL,
	[session] [varchar](50) NULL,
 CONSTRAINT [PK_cart] PRIMARY KEY CLUSTERED 
(
	[id_cart] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[category]    Script Date: 05/08/2022 23:40:38 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[category](
	[id_cat] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NULL,
	[tax] [float] NOT NULL,
	[image] [nchar](10) NULL,
 CONSTRAINT [PK_category] PRIMARY KEY CLUSTERED 
(
	[id_cat] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[product]    Script Date: 05/08/2022 23:40:38 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[product](
	[id_prod] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NOT NULL,
	[quantity] [varchar](50) NOT NULL,
	[value] [float] NOT NULL,
	[category] [int] NOT NULL,
 CONSTRAINT [PK_product] PRIMARY KEY CLUSTERED 
(
	[id_prod] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[sales]    Script Date: 05/08/2022 23:40:38 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[sales](
	[id_sale] [int] IDENTITY(1,1) NOT NULL,
	[value] [float] NOT NULL,
	[session] [varchar](50) NULL,
 CONSTRAINT [PK_sales] PRIMARY KEY CLUSTERED 
(
	[id_sale] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[cart]  WITH CHECK ADD  CONSTRAINT [FK_cart_product] FOREIGN KEY([product])
REFERENCES [dbo].[product] ([id_prod])
GO
ALTER TABLE [dbo].[cart] CHECK CONSTRAINT [FK_cart_product]
GO
ALTER TABLE [dbo].[product]  WITH CHECK ADD  CONSTRAINT [FK_product_category] FOREIGN KEY([category])
REFERENCES [dbo].[category] ([id_cat])
GO
ALTER TABLE [dbo].[product] CHECK CONSTRAINT [FK_product_category]
GO
